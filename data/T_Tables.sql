USE [WeddingSCS]
GO

/****** Object:  Table [dbo].[T_Tables]    Script Date: 04/10/2018 12:42:00 ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

CREATE TABLE [dbo].[T_Tables](
	[id] [int] NOT NULL,
	[Description] [nvarchar](20) NULL,
	[Places] [int] NULL,
	[Comment] [nvarchar](10) NULL,
 CONSTRAINT [PK_T_Tables] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX  = OFF, STATISTICS_NORECOMPUTE  = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS  = ON, ALLOW_PAGE_LOCKS  = ON) ON [PRIMARY]
) ON [PRIMARY]

GO


