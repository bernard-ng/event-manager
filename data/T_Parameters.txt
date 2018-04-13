USE [WeddingSCS]
GO

/****** Object:  Table [dbo].[T_Parameters]    Script Date: 04/10/2018 12:42:14 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[T_Parameters](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[Designation] [nchar](100) NULL,
	[NbreInvites] [int] NULL,
	[Date] [date] NULL,
	[Lieu] [nchar](70) NULL,
 CONSTRAINT [PK_T_Parameters] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO


