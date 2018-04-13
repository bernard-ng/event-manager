USE [WeddingSCS]
GO

/****** Object:  Table [dbo].[T_Checkin]    Script Date: 04/10/2018 12:42:32 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[T_Checkin](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[CodeInvite] [nvarchar](20) NOT NULL,
	[HeureIn] [datetime2](7) NULL,
	[HeureOut] [datetime2](7) NULL,
	[Id_Table] [int] NULL,
 CONSTRAINT [PK_T_Checkin] PRIMARY KEY CLUSTERED 
(
	[CodeInvite] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO

ALTER TABLE [dbo].[T_Checkin]  WITH CHECK ADD  CONSTRAINT [FK_T_Checkin_T_Invites] FOREIGN KEY([CodeInvite])
REFERENCES [dbo].[T_Invites] ([Code])
GO

ALTER TABLE [dbo].[T_Checkin] CHECK CONSTRAINT [FK_T_Checkin_T_Invites]
GO

ALTER TABLE [dbo].[T_Checkin]  WITH CHECK ADD  CONSTRAINT [FK_T_Checkin_T_Tables] FOREIGN KEY([Id_Table])
REFERENCES [dbo].[T_Tables] ([id])
GO

ALTER TABLE [dbo].[T_Checkin] CHECK CONSTRAINT [FK_T_Checkin_T_Tables]
GO


